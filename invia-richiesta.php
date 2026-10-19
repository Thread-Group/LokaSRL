<?php
/**
 * LOKA SRL - Contatti Aruba PHP. Richiede hosting PHP e casella mittente attiva.
 * Prima della pubblicazione: test invio/ricezione, SPF/DKIM e informative privacy.
 */
declare(strict_types=1);
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contatti.html', true, 303);
    exit;
}
session_start(['cookie_httponly' => true, 'cookie_secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off', 'cookie_samesite' => 'Lax']);
function redirectToForm(string $status): never {
    header('Location: contatti.html?esito=' . rawurlencode($status), true, 303);
    exit;
}
if (isset($_SESSION['last_form_time']) && time() - (int)$_SESSION['last_form_time'] < 60) {
    redirectToForm('errore');
}
// Hidden field filled by bots: do not process.
if (!empty($_POST['azienda_web'])) {
    redirectToForm('ok');
}
function cleanField(string $value, int $max): string {
    $value = trim(str_replace(["\r", "\0"], '', $value));
    return mb_substr($value, 0, $max, 'UTF-8');
}
$nome = cleanField((string)($_POST['nome'] ?? ''), 100);
$email = cleanField((string)($_POST['email'] ?? ''), 200);
$telefono = cleanField((string)($_POST['telefono'] ?? ''), 35);
$localita = cleanField((string)($_POST['localita'] ?? ''), 100);
$intervento = cleanField((string)($_POST['intervento'] ?? ''), 70);
$messaggio = cleanField((string)($_POST['messaggio'] ?? ''), 2500);
$allowed = ['Sopralluogo gratuito','Posa pavimenti','Rivestimenti','Informazioni generali'];
$valid = $nome !== '' && $telefono !== '' && $localita !== '' && $messaggio !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) && in_array($intervento, $allowed, true) && ($_POST['privacy_presa_visione'] ?? null) === '1' && mb_strlen($nome) <= 100 && mb_strlen($messaggio) >= 5;
if (!$valid) { redirectToForm('dati'); }
$to = 'info@lokasrl.com';
$subject = '=?UTF-8?B?' . base64_encode('Nuova richiesta dal sito LOKA SRL - ' . $intervento) . '?=';
$body = "Nuova richiesta tramite lokasrl.com\n\n" .
        "Nome: {$nome}\nEmail: {$email}\nTelefono: {$telefono}\nLocalità: {$localita}\nTipo richiesta: {$intervento}\n\n" .
        "Messaggio:\n{$messaggio}\n\n---\nTrattare i dati esclusivamente per la gestione della richiesta; evitare inoltri non autorizzati.\n";
// From appartenente al dominio; configurare SPF/DKIM e verificare le regole Aruba.
$headers = [
    'From' => 'LOKA SRL <no-reply@lokasrl.com>',
    'Reply-To' => $email,
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/plain; charset=UTF-8',
    'X-Mailer' => 'LOKA-contact-form'
];
$sent = mail($to, $subject, $body, $headers);
if ($sent) {
    $_SESSION['last_form_time'] = time();
    redirectToForm('ok');
}
redirectToForm('errore');

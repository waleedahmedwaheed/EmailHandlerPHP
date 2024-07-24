<?php
require 'vendor/autoload.php';

use Ddeboer\Imap\Server;
use Ddeboer\Imap\Message;

// Connection details
$hostname = getenv('IMAP_HOST');
$port = getenv('IMAP_PORT'); // or 995 for SSL
$username = getenv('IMAP_USERNAME');
$password = getenv('IMAP_PASSWORD');

// Connect to the server
$server = new Server($hostname, $port, '/pop3/notls'); // For SSL, use '/pop3/ssl/novalidate-cert'

// Authenticate
$connection = $server->authenticate($username, $password);

// Get the mailbox
$mailbox = $connection->getMailbox('INBOX');

// Get all messages
$messages = $mailbox->getMessages();

foreach ($messages as $message) {
    // Print message details
    echo 'Subject: ' . $message->getSubject() . PHP_EOL;
    echo 'From: ' . $message->getFrom()->getAddress() . PHP_EOL;
    echo 'Date: ' . $message->getDate()->format('Y-m-d H:i:s') . PHP_EOL;
    echo 'Body: ' . $message->getBodyText() . PHP_EOL;
    
    // Mark message as read
    $message->markAsSeen();
    
    echo '<br>';
    // Optionally delete the message
    // $message->delete();
}
?>

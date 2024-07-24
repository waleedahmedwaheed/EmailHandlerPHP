# EmailHandlerPHP

This repository contains PHP scripts for sending and receiving emails using the PHPMailer and Ddeboer\Imap libraries.

## Requirements

- PHP 7.2 or higher
- Composer

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/EmailHandlerPHP.git
    cd EmailHandlerPHP
    ```

2. Install dependencies using Composer:
    ```bash
    composer install
    ```

3. Create a `.env` file in the project root and add your configuration:
    ```plaintext
    SMTP_HOST=smtp.example.com
    SMTP_PORT=587
    SMTP_USERNAME=your-email@example.com
    SMTP_PASSWORD=your-email-password
    MAIL_FROM_ADDRESS=your-email@example.com
    MAIL_FROM_NAME=Your Name
    MAIL_TO_ADDRESS=recipient-email@example.com
    MAIL_TO_NAME=Recipient Name

    IMAP_HOST=imap.example.com
    IMAP_PORT=110
    IMAP_USERNAME=your-email@example.com
    IMAP_PASSWORD=your-email-password
    ```

## Usage

### Sending Emails

1. Run the `send_email.php` script:
    ```bash
    php send_email.php
    ```

### Receiving Emails

1. Run the `receive_email.php` script:
    ```bash
    php receive_email.php
    ```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

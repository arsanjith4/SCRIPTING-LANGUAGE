const nodemailer = require('nodemailer');

// Create transporter with Gmail service
const transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: 'arsanjith7@gmail.com',      // Replace with your Gmail address
        pass: 'gfnq yrej xwud gpeo'          // Replace with App Password (see note below)
    }
});

// Email details
const mailOptions = {
    from: 'arsanjith7@gmail.com',          // Sender email
    to: 'arsanjith6@gmail.com',        // Receiver email
    subject: 'Test Email from Node.js',    // Email subject
    text: 'This is a test email sent using Node.js!',   // Plain text
    html: '<b>This is a test email sent using Node.js!</b>' // HTML body
};

// Send the email
transporter.sendMail(mailOptions, (err, info) => {
    if (err) {
        console.log('Error occurred:', err.message);
    } else {
        console.log('Email sent successfully:', info.response);
    }
});

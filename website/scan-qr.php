<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
    <script src="js/html5-qrcode.min.js"></script>
</head>
<body>
    <h1>Scan QR Code</h1>

    <!-- Div to show the video stream and scan result -->
    <div style="width: 300px;" id="reader"></div>
    <p id="qr-result">Scan a QR Code</p>

    <script>
        function onScanSuccess(qrCodeMessage) {
            // Display the scanned result
            document.getElementById("qr-result").innerText = `QR Code Data: ${qrCodeMessage}`;
            
            // Optional: Send the data to your server, fill input fields, etc.
            // e.g., fill a form field automatically
            // document.getElementById("inputFieldId").value = qrCodeMessage;
        }

        function onScanFailure(error) {
            console.warn(`QR code scan error: ${error}`);
        }

        let html5QrCode = new Html5Qrcode("reader");
        html5QrCode.start(
            { facingMode: "environment" }, // Use rear camera
            {
                fps: 10, // Scans per second
                qrbox: 250 // Display size for QR code scanning
            },
            onScanSuccess,
            onScanFailure
        ).catch((err) => {
            console.error(`Error starting scanner: ${err}`);
        });
    </script>
</body>
</html>

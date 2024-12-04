<?php
// Directory and file name
$directory = "ftp";
$fileName = "home.php";

// Check if the directory exists; if not, create it
if (!is_dir($directory)) {
    if (!mkdir($directory, 0777, true)) {
        die("Failed to create directory: $directory");
    }
}

// Full path to the file
$filePath = $directory . DIRECTORY_SEPARATOR . $fileName;

// Content for the legal.md file
$fileContent = <<<EOD
# Legal Notice

This is a placeholder for the legal documentation.

## Terms of Service
By using this service, you agree to the terms and conditions outlined herein.

## Privacy Policy
We respect your privacy and are committed to protecting your data.

---

Generated on: " . date("Y-m-d H:i:s") . "

EOD;

// Write content to the file
if (file_put_contents($filePath, $fileContent)) {
    echo "File created successfully: $filePath";
} else {
    echo "Failed to create the file.";
}
?>

<?php
$target_dir = "../forNICA/";
$uploadOk = 1;

if (isset($_POST["submit"])) {
    // 1. Double check standard PHP upload errors
    if (!isset($_FILES["fileToUpload"]) || $_FILES["fileToUpload"]["error"] !== UPLOAD_ERR_OK) {
        echo "File upload failed or no file selected.";
        $uploadOk = 0;
    }

    if ($uploadOk === 1) {
        $tmp_file = $_FILES["fileToUpload"]["tmp_name"];
        $original_name = $_FILES["fileToUpload"]["name"];
        
        // 2. Map safe extensions to their actual binary footprints (MIME types)
        $allowed_formats = [
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'doc'  => 'application/msword',
            'xls'  => 'application/vnd.ms-excel'
        ];

        // 3. Extract the file extension safely
        $fileExtension = strtolower(pathinfo($original_name, PATHINFO_EXTENSION));

        // 4. Look deep inside the file to find its actual type (ignores extension spoofing)
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $detectedMime = $finfo->file($tmp_file);

        // 5. Run the validation checks
        if (!array_key_exists($fileExtension, $allowed_formats)) {
            echo "Error: Only DOC, DOCX, XLS, and XLSX files are allowed.";
            $uploadOk = 0;
        } elseif ($detectedMime !== $allowed_formats[$fileExtension] && $detectedMime !== 'application/zip') {
            // Note: 'application/zip' handles servers that detect docx/xlsx as basic zip archives
            echo "Security Alert: File type mismatch. This file may be modified or dangerous.";
            $uploadOk = 0;
        } else {
            // Success! The file matches what it claims to be.
            echo "File is a valid document - Type: " . $fileExtension . " (Size: " . filesize($tmp_file) . " bytes).<br>";
            
            // 6. Generate a safe name to prevent directory traversal attacks
            $safe_filename = bin2hex(random_bytes(8)) . '.' . $fileExtension;
            $target_file = $target_dir . $safe_filename;

            // 7. Move file out of temporary storage
            if (move_uploaded_file($tmp_file, $target_file)) {
                echo "The file has been uploaded successfully as " . $safe_filename;
            } else {
                echo "Sorry, there was an error moving your uploaded file.";
            }
        }
    }
}
?>
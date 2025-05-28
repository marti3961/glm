<?php

namespace App\Services;

class ImageService
{
    /**
     * Uploads an image to a given folder path relative to /public/uploads/
     *
     * @param \CodeIgniter\HTTP\Files\UploadedFile $file
     * @param string $folder Folder path relative to /public/uploads/, e.g., "avatars", "products/2025", etc.
     * @return array
     */
    public function uploadImage($file, string $folder): array
    {
        if (!$file || !$file->isValid()) {
            return ['success' => false, 'error' => 'No valid file uploaded.'];
        }

        // Validate MIME type (safe approach)
        $mimeType = $file->getClientMimeType();
        if (!in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif', 'image/webp'])) {
            return ['success' => false, 'error' => 'Uploaded file is not a valid image.'];
        }

        // Normalize and secure folder path
        $safeFolder = trim(str_replace(['..', '\\'], '', $folder), '/');
        $uploadPath = ROOTPATH . 'public/Images/' . $safeFolder . '/';

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $newName = $file->getRandomName();

        if (!$file->move($uploadPath, $newName)) {
            return ['success' => false, 'error' => 'Failed to move uploaded file.'];
        }

        return [
            'success' => true,
            'filename' => $newName,
            // Adapt to your real public URL if different
            'path' => "images/{$safeFolder}/{$newName}"
        ];
    }

    /**
     * Deletes an image file relative to /public/uploads/
     *
     * @param string $relativePath e.g., "avatars/image.jpg" or "products/2025/sample.png"
     * @return array
     */
    public function deleteImage(string $relativePath): array
    {
        // Clean the path to avoid directory traversal
        $safePath = FCPATH . 'uploads/' . trim(str_replace(['..', '\\'], '', $relativePath), '/');

        if (!file_exists($safePath)) {
            return ['success' => false, 'error' => 'File does not exist.'];
        }

        if (unlink($safePath)) {
            return ['success' => true, 'message' => 'File deleted.'];
        }

        return ['success' => false, 'error' => 'Failed to delete file.'];
    }
}

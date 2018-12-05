<?php
    class VideoDetailsFormProvider {
        public function createUploadForm() {
            $fileInput = $this->createFileInput();
            return "<form action='processing.php' method='POST'>
                        $fileInput
                    </form>";
        }

        private function createFileInput() {
            return "<div class='form-group'>
                        <label for='videoUpload'>Upload your video</label>
                        <input type='file' class='form-control-file' id='videoUpload' required>
                    </div>";
        }
    }
?>
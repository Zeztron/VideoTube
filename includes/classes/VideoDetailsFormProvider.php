<?php
    class VideoDetailsFormProvider {
        public function createUploadForm() {
            $fileInput = $this->createFileInput();
            $titleInput = $this->createTitleInput();
            $descriptionInput = $this->createDescriptionInput();
            return "<form action='processing.php' method='POST'>
                        $fileInput
                        $titleInput
                        $descriptionInput
                    </form>";
        }

        private function createFileInput() {
            return "<div class='form-group'>
                        <label for='videoUpload'>Upload your video</label>
                        <input type='file' class='form-control-file' id='videoUpload' name='fileInput' required>
                    </div>";
        }

        private function createTitleInput() {
            return "<div class='form-group'>
                        <input class='form-control' type='text' name='titleInput' placeholder='Title'>
                    </div>";
        }

        private function createDescriptionInput() {
            return "<div class='form-group'>
                        <textarea class='form-control' placeholder='Description' name='descriptionInput' id='descriptionArea' rows='3'></textarea>
                    </div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form with Image Preview</title>
</head> -->

<body style="font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">

    <div style="border: 1px solid #ccc; padding: 20px; border-radius: 5px; background-color: #f9f9f9;">
        <form action="#" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column;">

            <label for="image" style="margin: 10px 0 5px;">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" style="padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <div style="margin-top: 10px; width: 100%; max-width: 300px; height: 300px; border: 2px dashed #ccc; display: flex; justify-content: center; align-items: center; overflow: hidden; background-color: #e9ecef; border-radius: 4px;">
                <img id="previewImg" src="" alt="Image Preview" style="width: 100%; height: auto; display: none;">
            </div>

            <button type="submit" style="padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; margin-top: 15px;">
                Submit
            </button>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const previewImg = document.getElementById('previewImg');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                previewImg.src = reader.result;
                previewImg.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                previewImg.style.display = 'none';
            }
        }
    </script>

</body>

</html>
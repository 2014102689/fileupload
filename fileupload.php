<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Sign Up</title>
</head>
<body>
	<!--- Header Showcase-->
	<header class="header">
		<a href="index.php">
			<h1>Upload file</h1>
		</a>
	</header>
	 <div class="container">
        <div class="card p-2 mt-2">
            <form action="transaction/upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <div class="card p-2">
                    <input type="file" name="fileToUpload[]" multiple required>
                </div>              
                <button class="btn btn-primary mt-2" type="submit">
                    <i class="fas fa-upload"></i></span> Upload
                </button>
            </form>
        </div>  
    </div>

	</body>
</html>
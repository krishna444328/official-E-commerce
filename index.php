<?php include 'rajasthan.html'; ?>


<?php
// Image paths
$images = ["images/img1.jpg", "images/img2.jpg", "images/img4.jpg"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Image Slider with Buttons</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="slider-container">
        <div class="slider">
            <?php foreach ($images as $image): ?>
                <div class="slide">
                    <img src="<?php echo $image; ?>" alt="Slider Image">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Previous and Next Buttons -->
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
    <!-- <div class="demo21">Welcome Back</div> -->

    <!-- JavaScript for Slider functionality -->
    <script>
        let index = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showSlide(n) {
            index += n;

            if (index >= totalSlides) {
                index = 0;
            } else if (index < 0) {
                index = totalSlides - 1;
            }

            slides.forEach((slide) => {
                slide.style.display = "none";
            });

            slides[index].style.display = "block";
        }

        function changeSlide(n) {
            showSlide(n);
        }

        // Auto slide every 3 seconds
        setInterval(() => changeSlide(1), 3000);

        // Initialize slider
        showSlide(0);
    </script>
    
</body>
</html>
<?php include 'welcom.html'; ?>
<?php include 'Tour Package.html'; ?>
<?php include 'Budget Tour.html'; ?>
<?php include 'footer.html'; ?>
<?php include 'footer1.html'; ?>



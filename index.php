<?php
include 'db.php';

// Fetch projects from the database
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luster Cleaning Solutions - Professional Cleaning Services in Tema, Ghana</title>
    <meta name="description" content="Luster Cleaning Solutions provides comprehensive cleaning services including domestic cleaning, carpet steam cleaning, end of lease cleaning, commercial cleaning, general cleaning, home interior and exterior cleaning, office cleaning, fumigation, vacuuming, and more. Located in Tema, Ghana, we ensure a spotless and healthy environment for your home and office.">
    <meta name="keywords" content="cleaning services, domestic cleaning, carpet steam cleaning, end of lease cleaning, commercial cleaning, home cleaning, office cleaning, fumigation, vacuuming, Tema, Ghana">
    <meta name="author" content="Luster Cleaning Solutions">
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero_text">
                        <h1>Experience the Ultimate Clean with Luster Cleaning Solutions</h1>
                        <p>Transforming homes and offices with services from domestic cleaning to fumigation, ensuring a pristine, healthy space for you.</p>
                        <div class="hero_call">
                            <a href="">
                                <button>Call Luster</button>
                            </a>
                        </div>
                    </div>
                    <img src="./images/hero_1.jpg" alt="">
                </div>

            </div>

        </div>

    </section>

    <section>
        <div class="three_grid">
            <div class="one_box">
                <img src="./images/icons_1.png" alt="">
                <h3>Comprehensive Services</h3>
                <p>
                    Offering a full range of cleaning services for homes and offices.
                </p>
            </div>
            <div class="one_box">
                <img src="./images/icons_2.png" alt="">
                <h3>Professional Quality</h3>
                <p>
                    Ensuring top-notch cleaning with experienced and dedicated staff.
                </p>
            </div>
            <div class="one_box">
                <img src="./images/icons_3.png" alt="">
                <h3>Local Expertise</h3>
                <p>
                    Proudly serving the Ghana community with tailored cleaning solutions.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="about_all">
            <div class="about_img">
                <img src="./images/about.jpg" alt="">
            </div>
            <div class="about_text">
                <h3>About Us</h3>
                <h1>Luster Cleaning Solutions</h1>
                <p>
                    Welcome to Luster Cleaning Solutions, your go-to for top-notch cleaning services in Tema,
                    Ghana. We specialize in making your homes and offices shine with our range of services,
                    including domestic cleaning, carpet steam cleaning, end of lease cleaning, and more.
                </p>
                <h3>Our Mission</h3>
                <p>
                    To deliver exceptional cleaning services that ensure a pristine and healthy environment
                    for your home or business.
                </p>
                <h3>Our Commitment</h3>
                <p>
                    We are committed to providing reliable, efficient, and thorough cleaning services to the
                    residents and businesses of Tema, Ghana. With Luster Cleaning Solutions, you can trust that
                    your cleaning needs will be handled with the utmost care and professionalism.
                </p>
                <div class="about_btn">
                    <a href="">
                        <button>Read more</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
    <div class="projects_all">
        <div class="project_title">
            <h1>Our Projects</h1>
        </div>
        <div class="project_grid">
            <?php
            if ($result->num_rows > 0) {
                // Output data for each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="project">';
                    echo '<a href="' . $row['project_image'] . '" data-fancybox="gallery">';
                    echo '<img src="' . $row['project_image'] . '" alt="' . htmlspecialchars($row['project_name']) . '">';
                    echo '</a>';
                    echo '</div>';
                }
            } else {
                echo "<p>No projects available.</p>";
            }
            ?>
        </div>
    </div>
</section>

    <script src="./js/swiper.js"></script>
</body>

</html>
<?php
$conn->close();
?>
<?php
// include() - copies the contents of a file into the current PHP script / sections of the website become reusable - changes only need to be made in 1 place
// similar to 'base.html' - {% %} block-endblock tags / extends used in Django --- export default / import components - functions in React
include("header.html");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    This is the Home page <br>
    Stuff goes here
</body>

</html>

<?php
include("footer.html");
?>
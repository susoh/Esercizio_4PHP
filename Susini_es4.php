<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size: 30px;">
    <?php
        $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed velit in augue faucibus ultrices. Nam finibus, sapien non tristique dictum, risus mauris porta dolor, sed pulvinar purus tellus non mauris. Aenean ut semper nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus ac arcu nunc. Duis tempor vel erat non tempus. Aliquam et risus hendrerit, mattis enim non, ultrices massa. Integer condimentum, metus ut cursus iaculis, arcu est varius quam, quis sollicitudin lorem nibh ac augue. Proin venenatis lacinia condimentum. Morbi accumsan magna varius, vehicula felis vitae, consectetur nunc. Pellentesque ac tempus quam. Vivamus eu eros a risus ornare ullamcorper ac in enim. In bibendum, diam id tincidunt tempus, metus diam molestie sapien, nec tempor nisi mi vitae diam. Phasellus non posuere dui. Ut consectetur scelerisque enim, vitae ullamcorper purus porta in.";
        echo "<p style= 'color:blue;'>" . strtoupper($str) . "</p>";
        echo "<p style= 'color:green;' > $str </p>";
        echo "<span style='color: red;' >" . strlen($str) . "</span><br>";
        echo "<span style='color:yellow;' >" . str_word_count($str) . "</span>";
    ?>
</body>
</html>
<style>
    form {
        border: 1px solid black;
        width: 500px;
        background: green;
        margin: auto;
    }

    input[type="number"] {
        width: 200px;
        padding: 12px 10px 12px 10px;
        border-radius: 20px;
        border: 2px solid black;
        font-size: 16px;
    }

    #submit {
        padding: 10px 32px;
        border-radius: 20px;
        border: 2px solid black;
        font-size: 16px;
    }
</style>
<?php
include "Rectangular.php";
?>

<form method="post">
    <h1 align="center">Rectangular</h1>
    <table>
        <tr>
            <td>Nhập chiều dài: <input type="number" name="height"></td>
        </tr>
        <tr>
            <td>Nhập chiều rộng: <input type="number" name="width"></td>
        </tr>
        <tr>
            <td>
                <button id="submit">Tính</button>
            </td>
        </tr>
    </table>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $height = $_POST["height"];
    $width = $_POST["width"];
    $rectangular = new Rectangular($height, $width);
    echo $rectangular->getArea();
    echo "<br>";
    echo $rectangular->getPerimeter();
}
?>
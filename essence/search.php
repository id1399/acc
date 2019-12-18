<?php
include('./db/conn.php');
?>
<div class="search-area">
    <form action="" method="get">
        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
        <button type="submit" name="submit">Search</button>
    </form>
</div>
<?php
if (isset($_GET['submit']) && $_GET["search"] != '') {
    $search = $_GET['search'];
    $query = "SELECT * FROM products WHERE (name like '%$search%') ";

    $sql = mysqli_query($conn, $query);
    //echo $sql;
    $num = mysqli_num_rows($sql);
    if ($num > 0) {
        echo "Có " . $num . " kết quả cho từ khóa <b>" . $search . "</b>";
        echo '           <div class="row">
        <div class="col-sm-6" style="width: 100%;">
          <section class="panel">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Source</th>
                </tr>
              </thead>
              <tbody><br>';
        foreach ($sql as $row) {
            echo '
 
             <tr>
                        <td><a href="">PR' . $row['id'] . '</a></td>
                        <td><a href="">' . $row['name'] . '</a></td>
                        <td><a href=""><img src="http://localhost/essence/img/product-img2/' . $row['image'] . '" alt="" style="width: 60px;"></a></td>
                        <td><a href="">$' . $row['sale_price'] . '</a></td>
                        <td><a href="">' . $row['source'] . '</a></td>
                        </tr>
                        ';
        }
        echo ' </tbody>
            </table>
          </section>
        </div>

      </div><br>
        <a href="index.php" > << Quay lại trang chủ</a>
      ';
    } else {
        echo "Không tìm thấy kết quả!";
    }
}
?>
<style>
    a {
        text-decoration: none;
    }
</style>
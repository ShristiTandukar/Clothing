<!-- 
include('../include/connect.php');
if(isset($post['insert_cat'])){
$category_title=$_POST['cat_title'];
// select data from database
$select_query="select*from 'categories' where category_title='$category_title'";
$result_select =mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
echo"<script>alert('This category is present inside the databse') </script>";
}
else{
$insert_query="insert into 'categories' (category_title)value('category_title')";
$result=mysqli_query($con, $insert_query);
if($result){
echo"<script>alert('Category has been inserted successsfully') </script>";
}
}}   -->


<form action="" method="post" class="mb-2">
        <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-success" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
            <input type="text" class="form-control" name="cat_title" placeholder="Insert categories"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
            <div class="input-group w-10 mb-2 m-auto">
                    
            <!-- <input type="submit" class="form-control bg-success" name="insert_cat" value="Insert Categories" > -->
                <button class="bg-success p-2 border-0 my-3"> Insert Categories</button>
            </div>
</form>
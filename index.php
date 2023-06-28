<?php include("database.php"); ?>
<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group pb-3">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group pb-3">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <input type="submit" value="Save Task" class="form-control btn btn-success btn-block" name="save_task">
                </form>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
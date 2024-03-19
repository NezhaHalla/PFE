<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");
body {
            font-family: Roboto, sans-serif;
           min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #EFEFEF;

        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
.card-container {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 20px;

}
.card {
    background: #fff;

    border-radius: 4px;
    box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.5);
    max-width: 400px;
    max-height: 400px;
    display: flex;
    flex-direction: row;
    border-radius: 25px;
    position: relative;
    overflow: hidden;
}
.card h2 {
  margin: 0;
  padding: 0 1rem;
}
.card .title {
  padding: 1rem;
  text-align: right;
  color: #063247;
  font-weight: bold;
  font-size: 12px;
}
.card .desc {
  padding: 0.5rem 1rem;
  font-size: 12px;
}
.card .actions {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  align-items: center;
  padding: 0.5rem 1rem;
}
.card svg {
  width: 85px;
  height: 85px;
  margin: 0 auto;
}

.img-avatar {
  width: 80px;
  height: 80px;
  position: absolute;
  border-radius: 50%;
  border: 6px solid white;
  background-image: linear-gradient(-60deg, #063247 0%, #2a57b9 100%);
  top: 15px;
  left: 85px;
}

.card-text {
  display: grid;
  grid-template-columns: 1fr 2fr;
}

.title-total {
  padding: 2.5em 1.5em 1.5em 1.5em;
}

path {
  fill: white;
}

.img-portada {
  width: 100%;
}

.portada {
  width: 100%;
  height: 100%;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;

   background-position: bottom center;
  background-size: cover;
}




.actions {
  display: flex;
  justify-content: flex-end;
  margin-top: 10px;
}

.actions a {
  text-decoration: none;
  padding: 8px 16px;
  margin-left: 10px;
  border-radius: 4px;
  font-weight: bold;
  color: #fff;
}

.actions a.delete {
  background-color: #FF6347; /* Red color for Delete button */
}

.actions a.modify {
  background-color: #4682B4; /* Blue color for Modify button */
}

/* Hover effect */
.actions a:hover {
  opacity: 0.8;
}


    </style>
</head>
<body>
    <div class="card-container">

            <div class="card">
                <!-- Card content -->
                <div class="img-avatar">

                </div>
                <div class="card-text">
                    <div class="portada" style="background-image: url('<?php echo e(asset('storage/' . $user->image)); ?>');"></div>

                    <div class="title-total">
                        <div class="title">Card</div>
                        <h2><?php echo e($user->name); ?></h2>
                        <div class="desc"><?php echo e($user->role); ?></div>
                        <div class="desc"><?php echo e($user->gender); ?></div>
                        <div class="desc"><?php echo e(date('Y-m-d', strtotime($user->DateDeNaissance))); ?></div>
                        <div class="desc"><?php echo e($user->email); ?></div>
                        <div class="actions">
                            <a class="delete" href="<?php echo e(route('user.delete', ['id' => $user->id])); ?>">Delete</a>
                            <a class="modify" href="<?php echo e(route('user.edit', ['id' => $user->id])); ?>">Modify</a>
                        </div>
                    </div>
                </div>
            </div>

    </div>

</body>
</html>
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/partials/card.blade.php ENDPATH**/ ?>
    <!DOCTYPE html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="addAdmin.css">
        <title>Document</title>
    </head>
    <body>
        <section class="add-admin-container">        
            <div class="popup">
                <a href="../../Staff_dashboard.php"><div class="close-btn">&times;</div></a>
                
                <div class="form">

                    <h2>Add admin</h2>
                    <form action="<?php echo htmlspecialchars('./createAdmin.php'); ?>" method="post">

                        <div class="form-element">
                            <label for="id">ID</label>
                            <input type="number" name="id" id="id" placeholder="Enter ID">
                        </div>
                        <div class="form-element">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-element">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-element">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter password">
                        </div>
            
                        <div class="form-element">
                            <button type="submit" name="submit">Add</button>
                        </div>

                    </form>
                    
                    
                   
                    
                </div>
            </div>
        </section>
    
        <script>
    
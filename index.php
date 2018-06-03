<html lang="en">
    <head>
        <title>API Workspace</title>
        <?php include 'header.php'; ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h3>Inputs</h3>

                    <form id="payload-form">
                        <label>Service</label>
                        <input type="text" id="service" class="form-control">
                        <br>
                        <label>Data Type</label>
                        <input type="text" id="datatype" class="form-control">
                        <br>
                        <label>Function</label>
                        <input type="text" id="function" class="form-control">
                        <br>
                        <button type="button" class="btn btn-primary" id="submit-btn">Submit</button>
                    </form>
                </div>

                <div class="col-xs-6">
                    <h3>Payload</h3>
                    <div id="payload" class="well">
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
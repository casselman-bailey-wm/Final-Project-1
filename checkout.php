<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 5/4/16
 * Time: 4:15 PM
 */
session_start();
require_once('header.php');
?>

<br>
<h1>Checkout</h1>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form class="form-horizontal" role="form">
            <fieldset>

                <!-- Form Name -->
                <legend>Address Details</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Line 1</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Address Line 1" class="form-control">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Line 2</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Address Line 2" class="form-control">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">City</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="City" class="form-control">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">State</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="State" class="form-control">
                    </div>

                    <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Post Code" class="form-control">
                    </div>
                </div>



                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Country</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Country" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<?php
require_once('footer.php');
?>


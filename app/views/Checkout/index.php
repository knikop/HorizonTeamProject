<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=_("Checkout") ?></title>
</head>

<body>
  <?php $this->view('navbar'); ?>

  <div class="row py-3">
    <div class="col-md-7 mb-4">
      <div class="card mb-4 mx-4">
        <div class="card-header py-3">
          <h5 class="mb-0"><?=_("Billing details") ?></h5>
        </div>
        <div class="card-body">
          <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form7Example1" class="form-control" required/>
                  <label class="form-label" for="form7Example1"><?=_("First name") ?></label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form7Example2" class="form-control" />
                  <label class="form-label" for="form7Example2"><?=_("Last name") ?></label>
                </div>
              </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form7Example3" class="form-control" />
              <label class="form-label" for="form7Example3"><?=_("Email") ?></label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form7Example5" class="form-control" />
              <label class="form-label" for="form7Example5"><?=_("Address") ?></label>
            </div>

            <div class="form-outline mb-4">
              <input type="email" id="form7Example5" class="form-control" />
              <label class="form-label" for="form7Example5"><?=_("Address 2 (optional)") ?></label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
              <input type="number" id="form7Example6" class="form-control" />
              <label class="form-label" for="form7Example6"><?=_("Phone") ?></label>
            </div>

            <div class="row mb-4">
              <div class="col">
                <div class="form-outline mb-4">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Country</option>
                    <option value="1">Canada</option>
                    <option value="2">US</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-outline mb-4">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>State</option>
                    <optgroup label="U.S. States/Territories">
                      <option value="AK">Alaska</option>
                      <option value="AL">Alabama</option>
                      <option value="AR">Arkansas</option>
                      <option value="AZ">Arizona</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DC">District of Columbia</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="IA">Iowa</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MD">Maryland</option>
                      <option value="ME">Maine</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MO">Missouri</option>
                      <option value="MS">Mississippi</option>
                      <option value="MT">Montana</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="NE">Nebraska</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NV">Nevada</option>
                      <option value="NY">New York</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VA">Virginia</option>
                      <option value="VT">Vermont</option>
                      <option value="WA">Washington</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WV">West Virginia</option>
                      <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Canadian Provinces">
                      <option value="AB">Alberta</option>
                      <option value="BC">British Columbia</option>
                      <option value="MB">Manitoba</option>
                      <option value="NB">New Brunswick</option>
                      <option value="NF">Newfoundland</option>
                      <option value="NT">Northwest Territories</option>
                      <option value="NS">Nova Scotia</option>
                      <option value="NU">Nunavut</option>
                      <option value="ON">Ontario</option>
                      <option value="PE">Prince Edward Island</option>
                      <option value="QC">Quebec</option>
                      <option value="SK">Saskatchewan</option>
                      <option value="YT">Yukon Territory</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline" style="margin-right: 700px;">
                  <input type="text" id="form7Example1" class="form-control" />
                  <label class="form-label" for="form7Example1"><?=_("Zipcode") ?></label>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0"><?=_("Credit Card Details") ?></h5>
        </div>
        <div class="card-body">
          <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Credit Card
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Debit Card
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Paypal
                </label>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form7Example1" class="form-control" />
                  <label class="form-label" for="form7Example1"><?=_("Name on card") ?><p style="font-size:12px; color:gray;">(fullname displayed on card)</p></label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form7Example2" class="form-control" />
                  <label class="form-label" for="form7Example2"><?=_("Credit card number") ?></label>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form7Example1" class="form-control" placeholder="" />
                  <label class="form-label" for="form7Example1"><?=_("Expiration Date") ?></label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form7Example2" class="form-control" />
                  <label class="form-label" for="form7Example2"><?=_("CCV") ?></label>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0"><?=_("Summary") ?></h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
            <?=_("Subtotal") ?>
              <span><?= $data ?>$</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong><?=_("Total amount") ?></strong>
              </div>
              <span><strong><?php echo round($data * 0.15 + $data, 2); ?>$</strong></span>
            </li>
          </ul>

          <a href="#"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-success btn-lg">
             Purchase
          </button></a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title text-center" id="exampleModalLabel"><?=_("Purchase Successful") ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h5><?php echo uniqid('order-') ?> has been shipped.</h5>
      </div>
      <div class="modal-footer">
        <a href=<?php echo '/Cart/shipped'?>><button type="button" class="btn btn-primary"><?=_("Return to home page") ?></button></a>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>

    </div>
  </div>
</body>

<style>
  body {
    overflow: hidden;
  }
</style>

</html>
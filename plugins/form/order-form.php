<form id=signupForm>
  <h3>Billing Information</h3>
  <fieldset id=billingAddress>
    <input type=text name="cc_first_name" id=firstName placeholder="First Name" autocorrect=off>
    <input type=text name="cc_last_name" id=lastName placeholder="Last Name" autocorrect=off>
    <input type=text name="cc_street1" id=address class=three-quarters placeholder=Street autocorrect=off>
    <input type=text name="cc_street2" id=address2 class=quarter placeholder=Apt/Suite autocorrect=off>
    <input type=text name="cc_city" id=city placeholder=City autocorrect=off>
    <input type=text name="cc_state" id=region placeholder=State/Province autocorrect=off>
    <input type=text name="cc_postal_code" id=postal placeholder="Zip Code" autocorrect=off>
    <select name="cc_country" id=country x-autocompletetype=country>
      <option value="United States">US / United States</option>
      <option value="Canada">Canada</option>
      <option value="Other">Other</option>
    </select>
  </fieldset>
  <h3 class=lockit>Credit Card Information</h3>
  <fieldset id=cardInfo class=full-width>
    <input type=tel min=1 name="cc_number" id=cc-number placeholder="Card Number" autocorrect=off>
    <div class=split-input>
      <select name="cc_card_type" id=cardType class=three-quarters>
        <option value="">Card Type</option>
        <option value="Visa">Visa</option>
        <option value="Mastercard">Mastercard</option>
        <option value="American Express">American Express</option>
      </select>
      <input type=tel name="cvv" id=cc-csc min=1 placeholder=CVV autocorrect=off class=quarter>
    </div>
    <select name="cc_exp_month" id=expMonth>
      <option value="">Expiration Month</option>
      <option value="01">01 January</option>
      <option value="02">02 February</option>
      <option value="03">03 March</option>
      <option value="04">04 April</option>
      <option value="05">05 May</option>
      <option value="06">06 June</option>
      <option value="07">07 July</option>
      <option value="08">08 August</option>
      <option value="09">09 September</option>
      <option value="10">10 October</option>
      <option value="11">11 November</option>
      <option value="12">12 December</option>
    </select>
    <select id=expYear name="cc_exp_year">
      <option value="">Expiration Year</option>
      <option value=2015>2015</option>
      <option value=2016>2016</option>
      <option value=2017>2017</option>
      <option value=2018>2018</option>
      <option value=2019>2019</option>
      <option value=2020>2020</option>
      <option value=2021>2021</option>
      <option value=2022>2022</option>
      <option value=2023>2023</option>
      <option value=2024>2024</option>
      <option value=2025>2025</option>
    </select>
  </fieldset>
  <input data-button="<?php
    switch ($template_theme) {
      case "dark":
        echo "green";
        break;
      case "code":
        echo "blue";
        break;
      case "book":
        echo "red";
        break;
      case "swiss":
        echo "blue";
        break;
      case "green":
        echo "";
        break;
      case "rfi":
        echo "green";
        break;
      default:
        echo "";
    }
  ?>" type=submit name=letsGo value="Complete My Order!">
</form>
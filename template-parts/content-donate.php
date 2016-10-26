  <div class="page_column--left donation_description">
  	<h1 class="donation_heading">Time Is Simply How You Live Your Life.</h1>
  	<p class="donation_tagline">100% Of Your Donations Will Go To Cancer Research And Education.</p>
  </div>

<div class="page_column--right donation_form">
  <ul class="tabs" data-tabs id="form_tabs" >
    <li class="tabs-title is-active"><a href="#form_one">Recurring Donation</a></li>
    <li class="tabs-title"><a href="#form_two">Donate Once</a></li>
  </ul>
  <div class="tabs-content" data-tabs-content="form_tabs">
    <div class="tabs-panel is-active" id="form_one">
          <form class="donation_form recurring" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="src" value="0">
          <input type="hidden" name="srt" value="12">
          <input type="hidden" name="p3" value="1">
          <input type="hidden" name="t3" value="M">
      		<input type="hidden" name="currency_code" value="USD">
      		<input type="hidden" name="bn" value="SagerStrongFoundation_Donation">
      		<input type="hidden" name="on0" value="Donate">
      		<input type="hidden" name="os0" value="Monthly">
          <input type="hidden" name="cmd" value="_xclick-subscriptions">
          <input type="hidden" name="item_name" value="Donate to the SagerStrong Foundation">
          <input type="hidden" name="no_note" value="1">
          <input type="hidden" name="no_shipping" value="2">
          <input type="hidden" name="business" value="stacysager@comcast.net">
          <input type="hidden" name="item_number" value="123">

          <h2 class="donation_form--heading">Donation Amount</h2>

          <ul class="options">
      	    <li class="button"><label ><input type="radio" value="25">25</label></li>
      	    <li class="button"><label ><input type="radio" value="50">50</label></li>
            <li class="button on"><label><input type="radio" value="100">100</label></li>
      	    <li class="button"><label ><input type="radio" value="250">250</label></li>
      	    <li class="button"><label ><input type="radio" value="500">500</label></li>
      	    <li class="button other_amount_button"><label>Other</label></li>
          </ul>

          <div class="input_container"><input class="other_amount_input" type="text" name="a3" value="100"></div>
          <span class="error">Please enter an amount</span>
          <!-- Display the payment button. -->
          <input class="submit_donation" type="submit" value="Donate">
      </form>
    </div>
      <div class="tabs-panel" id="form_two">
      <form class="donation_form single" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_donations">
        <input type="hidden" name="business" value="stacysager@comcast.net">
        <input type="hidden" name="item_number" value="123">

        <h2 class="donation_form--heading">Donation Amount</h2>

        <ul class="options">
    	    <li class="button"><label ><input type="radio" value="25">25</label></li>
    	    <li class="button"><label ><input type="radio" value="50">50</label></li>
          <li class="button on"><label><input type="radio" value="100">100</label></li>
    	    <li class="button"><label ><input type="radio" value="250">250</label></li>
    	    <li class="button"><label ><input type="radio" value="500">500</label></li>
    	    <li class="button other_amount_button"><label>Other</label></li>
        </ul>

        <div class="input_container"><input class="other_amount_input" type="text" name="amount" value="100"></div>
        <span class="error">Please enter an amount</span>
        <!-- Display the payment button. -->
        <input class="submit_donation" type="submit" value="Donate">
      </form>
    </div>
  </div>
</div>

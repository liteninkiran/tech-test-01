<h1>Technical Test</h1>

<h2>Scenario</h2>

<p>
    You are creating a digital freelance site where users post some basic information about
    themselves and an hourly rate in a currency of their choosing. Anyone can view a specific
    user on the platform and view their hourly rate in any currency.
</p>
<br>
<h2>Your Task</h2>

<p>
    Create a small Laravel application that allows you to create users with their hourly rate
    information, then display any specific user with their hourly rate information converted into
    any currency provided. For simplicity, your app will only need to deal with EUR, USD & GBP
    currencies. You will also need to provide two drivers to convert the hourly rates (this will be
    explained in more detail below).
</p>
<br>
<h2>Guidelines</h2>

<ul>
    <li>Laravel framework v6.x or higher</li>
    <li>Php7.2 or higher</li>
    <li>Your code should be pushed to a publicly accessible GitHub account, or similar.</li>
</ul>
<br>
<h2>Step 1</h2>

<p>
    Create a database which stores some basic user information and their hourly rate. Your app
    does not need to authorise users so there is no need to set a password.
</p>
<br>
<h2>Step 2</h2>

<p>
    Write a route that allows you to create a user by providing all the user details (including
    hourly rate).
</p>
<br>
<h2>Step 3</h2>

<p>
    Write a route that will show you the details and hourly rate of a specific user in any currency
    you provide (as mentioned above, you are only required to display in GBP, USD, EUR).
    Currencies should be converted using either a local driver or a third-party service driver. The
    default driver should be local if one is not provided and it should be easy to swap between
    the two. The local driver should use the following exchange rates to convert the salaries:
</p>

<ul>
    <li>GBP – USD (1.3)</li>
    <li>GBP – EUR (1.1)</li>
    <li>EUR – GBP (0.9)</li>
    <li>EUR – USD (1.2)</li>
    <li>USD – GBP (0.7)</li>
    <li>USD – EUR (0.8)</li>
</ul>

<br>
<p>
    The external service driver should make an api call to a currency exchange in order to get
    the correct exchange rate. We highly recommend using the https://exchangeratesapi.io/ but 
    you are free to use any service you wish.
</p>
<br>
<h2>Step 4</h2>

<p>
    Write some phpunit tests to make sure your code is working properly.
</p>

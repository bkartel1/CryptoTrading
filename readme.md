<b>My Coin Trading Project</b> connects to the following Crypto-Currency Market
Capitalization sites via api (implemented in the
background, using <i>laravel Task Scheduling</i>):
   <ul>
     <li>coinbin.org</li>
     <li>worldcoinindex.com </li>
     <li>coindar.org</li>
     <li>solume.io</li>
     <li>coinmarketcap.org</li>
   </ul>
   
   <b>General Information </b>
   <ul>
         <li>
            Information is displayed in <i>Laravel Datatables</i>, which includes table
             views (datagrids) with <i>pagination</i>, <i>searching</i> and 
             <i>sorting</i> capabilities. 
         </li>
         <li>
             Site includes basic <i>login/logout/register functionality</i>. <br/>
         </li>
         <li> 
            <i>Metronic</i> theme is integrated.
         </li>
         <li>
             <i>Twitter</i> integration implemented. User can configure <i>Twitter account</i> </a>
             and the corresponding tweets will be retrieved.
         </li>
         <li>
            <i>Coin Events</i> are shown in the calendar.
         </li>
         <li> 
            <i>select2.js JQuery plugin</i> is used to search for a coin.
         </li> 
         <li>
            Project has a <i>chat</i> implemented using <i>node.js framework</i>
         </li>
    </ul>
 <br/>
 <br/>
 <b>Prerequisits</b>
 <ul>
   <li>Ensure you have PHP version 7.1.* </li>
   <li>Make sure that you have already installed (Node.JS).</li>
 </ul>
 <b>Running the site</b><br/>
 After you have cloned or downloaded the project, navigate to the corresponding directory
  <ul>
     <li>
     Install all the dependencies as specified in the <i>composer.lock</i> file (in your terminal). <br/>
     cd cryptoTrading <br/>
     composer install 
     </li>
     <li>Copy the <i>.env.example</i> file to the <i>.env</i> file, and set the corresponding keys</li>
     <li> Run the following and add the corresponding keys to .env file<br/>
     php artisan vendor:publish --provider="Thujohn\Twitter\TwitterServiceProvider"
     </li>
     <li> Run the site <br/> php artisan serve --host=your_host --port=your_port <br/> Alternatively, create a virtual host. <br/>
     </li>
     <li>Execute the migrations <br/> php artisan migrate</li>
     <li>For the <i>Linux</i> system cron, add the following Cron entry to your server: <br/> * * * * * php /path-to-the-project/artisan schedule:run >> /dev/null 2>&1 <br/> <i>Windows</i> has GUI equivalent called <i>Task Scheduler</i>, that can be made to perform similar function. <br/> You can <i>run schedules by hand</i>, by using this command in Command Prompt: <br/> php artisan schedule:run <br/> (however in this case, you've to run the command on your own for multiple times.)</li>
     <li>In your root directory, run this command in your terminal/command prompt. This will
      install all the corresponding node packages listed in 
      package.json file
     <br/> npm install
     </li>
     <li>In your root directory run the server using terminal / command prompt with this syntax :  
     <br/>node node/server.js
     </li>
  </ul>
  <b>Used Technologies</b>
  <ul>
    <li>Laravel task scheduling</li>
    <li>Creating own artisan commands</li>
    <li>Laravel Guzzle HTTP library</li>
    <li>Laravel Datatables</li>
    <li>Twitter API Integration</li>
    <li>select2.js JQuery Technology</li>
    <li>Websocket API</li>
    <li>node-mysql node package</li>
    <li>http node package</li>
    <li>mysql node package</li>
  </ul>
  
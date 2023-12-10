<nav>
    <div>
        <h1>logo</h1>    
    </div>
    <div>
        <h1>Real state portal</h1>
    </div>
    <div>
        <div>
            <button><a href="{{route('addBroker')}}">Broker</a></button>
    </div>
    </div>
   </nav>
    <section>
        <h1>Please login to continue...</h1>
    <ul class='showBrokerLI'>
        <li>
            <label for="">Email</label>
            <input type="email" require>
        </li>
        <li>
            <label for="">Password</label>
            <input type="password" require>
        </li>
        <li>
        <button><a href="{{route('showBroker')}}">Login</a></button>
        </li>
</ul>
    </section>
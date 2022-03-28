 <?php
 class Subscription
 {   
     protected StripeGateWay $gateway; // $gateway is pointer for another class
     
     public function __construct(StripeGateWay $gateway)
     {  
        $this->gateway = $gateway; 
     }

     public function create()
     {

     }

     public function cancel()
     {
        // find the stripe customer
        $this->gateway->findStripeCustomer();
        // find the stripe subscripton by custormer.
        $this->gateway->findStripeSubscriptionByCustomer();
     }

     public function invoice()
     {

     }

     public function swap($newPlan)
     {

     }

 }

 interface Gateway
 {
    public function findCustomer();
    public function findStripeSubscriptionByCustomer();
 }

 class StripeGateWay implements Gateway
 {
     public function findCustomer()
     {

     }

     public function findStripeSubscriptionByCustomer()
    {

    }
 }

 class BraintreeGateWay implements Gateway
 {
     public function findCustomer()
     {

     }

     public function findStripeSubscriptionByCustomer()
    {

    }
 }


 new Subscription(new StripeGateWay());
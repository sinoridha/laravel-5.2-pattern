# Sample Implementation Patterns In Laravel 5.2

This repository contains sample implementation of some design pattern such as : Depedecy Injection, IoC container by Laravel to resolve dependency injections, also [Clean Architecture](https://8thlight.com/blog/uncle-bob/2012/08/13/the-clean-architecture.html).

Our core app located in App/MyApp , see this structure under "App" directory and those explanation :

app/  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MyApp/  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contract/       ----------> Location of Interfaces  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entity/         ----------> Location of Data Structure  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provider/       ----------> Providers location, where service and providers binding  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Repository/     ----------> Location of Class that implement Contract that used by Service  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Service/        ----------> Business rule code located, no direct use vendor package / entity  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Http/  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controllers/    ----------> controller just calling service  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...  
vendor/  
...  

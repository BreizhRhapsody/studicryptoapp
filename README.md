# studicryptoapp
Project realized to validate my training at STUDI.
A mobile and responsive web application to manage your cryptocurrency transactions.

## Development environment

    PHP 8.0.2
    Composer
    Symfony CLI
    Ux-Chartjs
    Webpack-encore

### Features

![ezgif com-gif-maker](https://user-images.githubusercontent.com/89726456/167917850-a31a4339-77de-495c-bb91-1dab939828be.gif)

✅ Add and remove purchases </br>
   -> To add, click on the '+' at the top of home page </br>
   -> To delete, click on the trash icon and confirm</br>
✅ See if it's the moment to sell </br>
   -> Where your purchases are stock on home page, there is a green arrow to the top when it's time and a red arrow to the bottom if you will lost money ! </br>
   -> You also can see how much did the purchase cost to you on click on the info icon next to the trash </br>
✅ Watch valuation of your purchases in a chart </br>
   -> Click on the total of your wallet on the home page </br>
✅ Refresh home page to have the last infos from the API CoinMarketCap

#### API 

This application is based on the CoinMarketCap API to obtain live information about the cryptocurrency market.
It is thanks to this that the valuation of your transactions is carried out.

More infos about this API : https://coinmarketcap.com/api/

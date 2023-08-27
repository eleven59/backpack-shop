# Using/building custom payment providers

This markdown file will at some point describe how to use custom payment providers and how to build one from scratch (well, not completely).

For now, however, please refer to the following:

- If you want to use Mollie, please see the [install instructions](https://github.com/eleven59/backpack-shop-mollie/blob/main/readme.md) for [eleven59/backpack-shop-mollie](https://github.com/eleven59/backpack-shop-mollie) 
- If you want to make your own, use my [eleven59/backpack-shop-mollie](https://github.com/eleven59/backpack-shop-mollie) package as a template and refer to the `PaymentProvider` abstract class ([here](https://github.com/eleven59/backpack-shop/blob/main/src/PaymentProvider.php)) for some documentation of what the required functions should do.

# Notes

This file will be used to document the working philosophy of the algorithm.

## Sifter

The current idea is to design this for the data to be provided by using a [Kruve sifter](https://www.kruveinc.com/pages/kruve-sifter).

## Implimentation

I believe I am first going to explore this with the Laravel Lumen. Why? Because I am super comfortable with their Eloquent ORM and prefer to prototype with it.

It may be nice to keep track of users' machines in the future. As in, they can add a machine to their profile and name it. So that if they get a second machine of the same model and submit samples, they can be grouped by machine. This will help us notice the different performances in machines of the same model.
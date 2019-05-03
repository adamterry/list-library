# List Library
A library of classes that contain various lists.
Great for quickly generating HTML select options and other content within your application.

## About
Having to create lists can be tedious at the best of times,
the List Library is an ongoing accumulation of common & un-common lists that I aim to keep in a single library so that I never have to build the same list twice.

Feel free to use any of the lists provided in you own applications or add your own lists to the library.

## Contributions
The more resources the better so If you have additional lists that you can contribute please fork this repo and add your list.

**Contribution guidelines**
1. Each list to be contained inside a method that returns an array
2. Methods are to be grouped inside a class with similar lists eg: a list containing each state of a particular country should go inside the *States* class
3. If any of the existing classes do not suit your list, you may create a new one. 
  Your new class name **must** start with a capital letter (Class{}) and the filename **must** match the class name (Class.php)
4. All class files must be .php  

## Current lists
* HTML Color names with hexadecimal values
* States (Australia & USA)
* Vehicles (Car & Motorcycle manufacturers)

## Additional content
* Car manufacturer images (images/cars) - Matching logos for each car manufacturer inside the cars() method

## Examples
* example-color.php - Code example using the Colors class to create HTML color & hex tables
* example-select.php - Code example of how to use the library to easily create HTML select options
* example-cars-with-logos - Code example of how to use the library to pull in images via HTML <img> tags

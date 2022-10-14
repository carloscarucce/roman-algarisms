# Roman to integer conversion

A simple package to make conversion between roman and integer. 

## Installation

```
composer require carloscarucce/roman-algarisms
```

## Usage

Convert integer number to roman
```php
$roman = int_to_roman(20);
echo $roman; //XX
```


Convert roman to integer
```php
$number = int_to_roman('XIV');
echo $number; //14
```

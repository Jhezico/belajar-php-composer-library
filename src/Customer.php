<?php

namespace JhezicoTheolova\Belajar;


class Customer
{
  public function __construct(private string $name = "Guest")
  {
  }

  public function sayHello(string $name): string
  {
    return "Hello $name, My Name is $this->name";
  }
}

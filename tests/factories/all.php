<?php

  $todayStr = strval(date("Y-m-d"));
  // $faker->locale('ja_JP');

  $factory('App\User',[
    'name'  => $faker->name,
    'email' => $faker->email,
    'password' => bcrypt('password')
    ]);

  $factory('App\Articles',[
    'user_id' => 'factory:App\User',
    'title' => $faker->sentence,
    'body'  => $faker->address,
    'published_at' => $todayStr
  ]);

  // I don't know pivot table makes data
  // $factory('App\Tag',[
  //   'article_id' => 'factory:App\Articles',
  //    'tag_id' => $faker->numberBetween(1,4)
  //   ]);

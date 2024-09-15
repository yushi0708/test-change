<?php

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
echo $people[0][0];
echo $people[0][1];
echo $people[0][2];
echo $people[1][0];
echo $people[1][1];
echo $people[1][2];
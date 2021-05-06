# Generate All Possible Combinations - PHP  (Supports no DUPLICATE combinations )

Example: 

$data = [ 
  'groupA'  => ['a', 'b', 'c'],
  'groupB'  => ['d', 'e', 'f'],
  'groupC'  => ['g', 'h', 'i'],
];

generate_combinations($data);

$this will output:

A D G
A D H
A D I
A E G ..... 

If you have an array that has repetive values as:

$data = [ 
  'groupA'  => ['3', '4', '5'],
  'groupB'  => ['3', '4', '5'],
  'groupC'  => ['3', '4', '5'],
];

Set the second paramter to true :  

generate_combinations($data, true);

It will prevent duplicate combinations:

3 3 3
3 3 4  -- |
3 3 5     |  THESE ARE THE SAME ...  If the second parameter is set to true, it will not generate " 3 4 3 " 
3 4 3  -- | <-- ( will not be outputed)
3 4 4
3 4 5
3 5 5

# Generate All Possible Combinations - PHP  (Supports no DUPLICATE combinations )

Example: 

$data = [ \n
  'groupA'  => ['a', 'b', 'c'], \n
  'groupB'  => ['d', 'e', 'f'], \n
  'groupC'  => ['g', 'h', 'i'], \n
]; \n

generate_combinations($data);

$this will output:

A D G \n
A D H \n
A D I \n
A E G .....  \n

If you have an array that has repetive values as:

$data = [ \n 
  'groupA'  => ['3', '4', '5'], \n
  'groupB'  => ['3', '4', '5'], \n
  'groupC'  => ['3', '4', '5'], \n
]; \n

Set the second paramter to true :  

generate_combinations($data, true);

It will prevent duplicate combinations:

3 3 3 \n
3 3 4  -- | \n
3 3 5     |  THESE ARE THE SAME ...  If the second parameter is set to true, it will not generate " 3 4 3 "  \n
3 4 3  -- | <-- ( will not be outputed) \n
3 4 4 \n
3 4 5 \n
3 5 5\ n

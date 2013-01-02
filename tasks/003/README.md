Pascal's Triangle
-----------------

This quiz is a complete ripoff of the [rubyquiz](http://rubyquiz.com/quiz84.html) which is a complete ripoff of a classical math concept.  Basically this test is about formatting some output as a pretty-printed string.  It can be solved many different ways so the test only mandates that your string matches the expected string.

Here is an example:
```
$ pascal 10
                           1                            
                        1     1                         
                     1     2     1                      
                  1     3     3     1                   
               1     4     6     4     1                
            1     5    10    10     5     1             
         1     6    15    20    15     6     1          
      1     7    21    35    35    21     7     1       
   1     8    28    56    70    56    28     8     1    
1     9    36    84    126   126   84    36     9     1
```

Running the Test
----------------

* $ vagrant ssh
* $ cd /vagrant/tasks/003
* $ phpunit --colors test
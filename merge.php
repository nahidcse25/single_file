<?php
$arr = array( 6,1,3,7,5,2,3,4,45,5,4,75,8,6,78); 
echo "<br>".implode(',',$arr)."<br>";
$arr=mergesort($arr);
echo implode(',',$arr);
 
function mergesort($numlist)
{
    if(count($numlist) == 1 ) return $numlist;
 
    $mid = count($numlist) / 2;
    $left = array_slice($numlist, 0, $mid);
    $right = array_slice($numlist, $mid);
 
    $left = mergesort($left);
    $right = mergesort($right);
     
    return merge($left, $right);
}
 
function merge($left, $right)
{
    $result=array();
    $leftIndex=0;
    $rightIndex=0;
 
    while($leftIndex<count($left) && $rightIndex<count($right))
    {
        if($left[$leftIndex]>$right[$rightIndex])
        {
 
            $result[]=$right[$rightIndex];
            $rightIndex++;
        }
        else
        {
            $result[]=$left[$leftIndex];
            $leftIndex++;
        }
    }
    while($leftIndex<count($left))
    {
        $result[]=$left[$leftIndex];
        $leftIndex++;
    }
    while($rightIndex<count($right))
    {
        $result[]=$right[$rightIndex];
        $rightIndex++;
    }
    return $result;
}
/*
Java implementation

// size of C array must be equal or greater than

// sum of A and B arrays' sizes

public void merge(int[] A, int[] B, int[] C) {

      int i, j, k, m, n;

      i = 0;

      j = 0;

      k = 0;

      m = A.length;

      n = B.length;

      while (i < m && j < n) {

            if (A[i] <= B[j]) {

                  C[k] = A[i];

                  i++;

            } else {

                  C[k] = B[j];

                  j++;

            }

            k++;

      }

      if (i < m) {

            for (int p = i; p < m; p++) {

                  C[k] = A[p];

                  k++;

            }

      } else {

            for (int p = j; p < n; p++) {

                  C[k] = B[p];

                  k++;

            }

      }

}
C++ implementation

// m - size of A

// n - size of B

// size of C array must be equal or greater than

// m + n

void merge(int m, int n, int A[], int B[], int C[]) {

      int i, j, k;

      i = 0;

      j = 0;

      k = 0;

      while (i < m && j < n) {

            if (A[i] <= B[j]) {

                  C[k] = A[i];

                  i++;

            } else {

                  C[k] = B[j];

                  j++;

            }

            k++;

      }

      if (i < m) {

            for (int p = i; p < m; p++) {

                  C[k] = A[p];

                  k++;

            }

      } else {

            for (int p = j; p < n; p++) {

                  C[k] = B[p];

                  k++;

            }

      }

}
*/
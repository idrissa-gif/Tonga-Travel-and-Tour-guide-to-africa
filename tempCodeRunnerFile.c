#include<stdio.h>

int main()
{
    int ar, ac , br, bc , n,m;
    scanf("%d %d",&n,&m);
    char arr[n][m];
    for(int i=0 ; i<n ; i++)
    {
        for(int j=0 ; j<m ; j++)
        {
            scanf("%c",&arr[i][j]);
        }
        
    }
   for(int i=0 ; i<n ; i++)
    {
        for(int j=0 ; j<m ; j++)
        {
            printf("arr[%d][%d] = %c ",i,j,arr[i][j]);
        }
        printf("\n");
    }
   
    return 0;
}
/*
arr[0][0] = 2
arr[0][1] = 3
arr[0][2] = 6
arr[1][0] = 9
arr[1][1] = 8
arr[1][2] = 7
arr[2][0] = 6
arr[2][1] = 5
arr[2][2] = 11
*/
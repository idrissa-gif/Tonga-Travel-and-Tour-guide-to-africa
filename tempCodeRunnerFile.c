#include<stdio.h>

int main()
{
    int n;
    char c;
    float f;
    double d;
    printf("Enter the values integer character float double:\n");
    scanf("%d %c %f %lf",&n,&c,&f,&d);
    printf("%d %c %f %lf",n,c,f,d);
    return 0;
}
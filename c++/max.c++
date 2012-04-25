/*
 * =====================================================================================
 *
 *       Filename:  1.c++
 *
 *    Description:  
 *
 *        Version:  1.0
 *        Created:  2012年04月14日 10时41分30秒
 *       Revision:  none
 *       Compiler:  gcc
 *
 *         Author:  Suzie Wong (ZYF), monkeysuzie@gmail.com
 *   Organization:  
 *
 * =====================================================================================
 */
#include <stdlib.h>
#include<iostream>
using namespace std;
int fun1(int a,int b)
{
	if(a>b)
		return a;
	else
		return b;
}
int main()
{
	int a,b;
	cin>>a>>b;
	int c=fun1(a,b);
	cout<<c<<endl;
	return 0;
}

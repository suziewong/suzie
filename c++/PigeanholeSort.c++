/*
 * =====================================================================================
 *
 *       Filename:  PigeanholeSort.c++
 *
 *    Description: 鸽巢排序 
 *
 *        Version:  1.0
 *        Created:  2012年04月25日 17时11分54秒
 *       Revision:  none
 *       Compiler:  gcc
 *
 *         Author:  Suzie Wong (ZYF), monkeysuzie@gmail.com
 *   Organization:  
 *
 * =====================================================================================
 */
#include<iostream>
using namespace std;

/* 
 * ===  FUNCTION  ======================================================================
 *         Name:  PigeanholeSort(int *array,int length)
 *  Description:  
 * =====================================================================================
 */


void PigeanholeSort (int*array,int length)
{
	int b[256]={0};
	int i,j,k=0;
	for(i=0;i<length;++i)
		b[array[i]]++;
	for(i=0;i<256;++i)
		for(k=0;k<b[i];++k)
			array[j++]=i;
}		/* -----  end of function PigeanholeSort(int *array,int length)  ----- */

int main()
{
	int a[]={22,12,45,67,89,34,45,63,12};
	int size=sizeof(a)/sizeof(int);
	PigeanholeSort(a,size);
	for(int i=0;i<size;i++)
		cout<<a[i]<<" ";
	cout<<endl;
	return 0;
}

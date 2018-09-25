
# coding: utf-8

# <H1>Patterns</H1>
# 
# 

# In[3]:


n=int(input("Enter the number"))
for var in range(0,n):
    for var1 in range(0,var):
        print('*',end='')
    print("\n",end='')


# In[4]:


n=int(input("Enter the number"))
for var in range(0,n):
    for var1 in range(0,var):
        print(var,end='')
    print("\n",end='')

    


# In[5]:


n=int(input("Enter the number"))
for var in range(0,n):
    t=1
    for var1 in range(0,var):
        print(t,end='')
        t=t+1
    print("\n",end='')


# In[6]:


n=int(input("Enter the number"))
t=1
for var in range(1,n+1):
    for var1 in range(0,var):
        print(t,end='')
        if t==0:
            t=1
        else:
            t=0
    print("\n",end='')
    if var%2!=0:
        t=0
    else:
        t=1


# In[7]:


n=int(input("Enter the number"))
t=1
for var in range(0,n):
    for var1 in range(0,var):
        print(t,end=' ')
        t=t+1
    print("\n",end='')


# In[8]:


n=int(input("Enter the number"))
for var in range(0,n):
    t=5
    for var1 in range(0,var):
        print(t,end='')
        t=t-1
    print("\n",end='')


# In[9]:


n=int(input("Enter the number"))
t=6
for var in range(0,n):
    for var1 in range(0,var):
        print(t,end='')
    print("\n",end='')
    t=t-1


# In[10]:


n=int(input("Enter the number"))
while n>0:
    for var1 in range(0,n):
        print('*',end='')
    print("\n",end='')
    n=n-1


# In[11]:


n=int(input("Enter the number"))
while n>0:
    for var1 in range(1,n):
        print(var1,end='')
    print("\n",end='')
    n=n-1


# In[54]:


n=int(input("Enter the number"))
t=1
l=n
for var in range(-n,0):
    for var1 in range(-n,0):
        print(t,end='')
    if var<(-l-1)//2:
        t+=1
    else:
        t-=1
    
    print("\n",end='')
    n=n-1


# In[55]:


n=int(input("Enter the number"))
for var in range(0,n):
    for var1 in range(0,2*n-2):
        print(' ',end='')
    n=n-1
    for var1 in range(0,var):
        print('* ',end='')
    print('')
    
    


# In[56]:


n=int(input("Enter the number"))
k=2*n-2
for var in range(0,n):
    for var1 in range(0,k):
        print(' ',end='')
    k=k-1
    for var1 in range(0,var):
        print('* ',end='')
    print('')


# In[57]:


n=int(input("Enter the number"))
k=2*n-2
for var in range(0,n):
    for var1 in range(0,k):
        print(' ',end='')
    k=k-1
    for var1 in range(0,var):
        print(var1+1,'',end='')
    print('')


# In[58]:


n=int(input("Enter the number"))
for var in range(0,n):
    for var1 in range(0,2*n-2):
        print(' ',end='')
    n=n-1
    for var1 in range(0,var):
        print(var1+1,end=' ')
    print('')
    
    


# In[59]:


n=int(input("Enter the number"))
for var in range(1,n):
    for var1 in range(0,n-var):
        print(' ',end='')
    for var1 in range(0,var*2-1):
        print('*',end='')
    print('')


# In[68]:


n=int(input("Enter a number"))
t=1
for var in range(2,n):
    t+=1
    for var1 in range(0,n-var+2):
        print(' ',end='')
    for var1 in range(0,2*var-3):
        print(t-1,end='')

    print('')


# In[69]:


n=int(input("Enter a number"))
for var in range(2,n):
    for var1 in range(0,n-var):
        print(' ',end='')
    for var1 in range(0,2*var-3):
        print(var1+1,end='')
    print('')


# In[70]:


n=int(input("Enter the number"))
k=2*n-2
for var in range(0,n):
    for var1 in range(0,k):
        print(' ',end='')
    k=k-1
    if var%2!=0:
        for var1 in range(0,var):
            print('* ',end='')
    print('')


# In[72]:


n=int(input("Enter a number"))
t=1
for var in range(2,n):
    l=t
    for var1 in range(0,n-var):
        print(' ',end='')
    for var1 in range(2,2*var-3):
        print(l-1,end='')
        if var1<(2*var-2)/2:
            l=l+1
        else:
            l=l-1
    t+=1
    
    print('')


# In[73]:


n=int(input("Enter a number"))
t=5
for var in range(2,n):
    l=t
    for var1 in range(0,n-var):
        print(' ',end='')
    for var1 in range(2,2*var-3):
        print(l,end='')
        if var1<(2*var-2)/2:
            l=l-1
        else:
            l=l+1
    
    print('')


# In[74]:


n=int(input("Enter a number"))
count=1
for var in range(1,n-1):
    for var1 in range(0,count+1):
        print(' ',end='')
    count=count+1
    for var1 in range(2,2*(n-var)-3):
       
        print('*',end='')
    print('')


# In[75]:


n=int(input("Enter a number"))
count=1
t=5
for var in range(1,n-1):
    for var1 in range(0,count+1):
        print(' ',end='')
    count=count+1
    for var1 in range(2,2*(n-var)-3):
       
        print(t,end='')
    t=t-1
    print('')


# In[76]:


n=int(input("Enter a number"))
count=1
for var in range(1,n-1):
    t=1
    for var1 in range(0,count):
        print(' ',end='')
    count=count+1
    for var1 in range(2,2*(n-var)-3):
           
        print(t,end='')
        t+=1
    print('')


# In[78]:


n=int(input("Enter a number"))
count=1
t=5
for var in range(0,n-1):
    l=t 
    for var1 in range(0,count+1):
        print(' ',end='')
    count=count+1
    for var1 in range(2,2*(n-var)-3):
        print(l,end='')
        if var1<(2*(n-var)-2)/2:
            l=l+1
        else:
            l=l-1
    t-=1
    print('')


# In[79]:


n=int(input("Enter a number"))
count=1
t=5
for var in range(0,n-1):
    l=t 
    for var1 in range(0,count+1):
        print(' ',end='')
    count=count+1
    for var1 in range(2,2*(n-var)-3):
        print(l,end='')
        if var1<(2*(n-var)-2)/2:
            l=l-1
        else:
            l=l+1
    print('')


# In[80]:


n=int(input("Enter a number"))
for var in range(0,n):
    for var1 in range(0,n-var):
        print(' ',end='')
    for var1 in range(0,2*var-3):
        print('*',end='')
    print('')
count=1
for var in range(1,n-1):
    for var1 in range(0,count+1):
        print(' ',end='')
    count=count+1
    for var1 in range(2,2*(n-var)-3):
       
        print('*',end='')
    print('')


# In[81]:


n=int(input("Enter a number"))
t=1
for var in range(2,n):
    
    t+=1
    for var1 in range(0,n-var):
        print(' ',end='')
    for var1 in range(0,2*var-3):
        print(t-1,end='')
    
    print('')
count=1
t-=1
for var in range(1,n-1):
    for var1 in range(0,count+1):
        print(' ',end='')
    count=count+1
    t-=1
    for var1 in range(2,2*(n-var)-3):
       
        print(t,end='')
    print('')


# In[83]:


n=int(input("Enter a number"))
for var in range(2,n):
    t=1
    for var1 in range(0,n-var):
        print(' ',end='')
    for var1 in range(0,2*var-3):
        print(t,end='')
        t+=1
    
    print('')
count=1

for var in range(1,n-1):
    t=1
    for var1 in range(0,count+1):
        print(' ',end='')
    count=count+1
    for var1 in range(2,2*(n-var)-3):
       
        print(t,end='')
        t+=1
    print('')


# In[84]:


n=int(input("Enter a number"))
t=1
for var in range(2,n):
    l=t
    for var1 in range(0,n-var):
        print(' ',end='')
    for var1 in range(2,2*var-3):
        print(l-1,end='')
        if var1<(2*var-2)/2:
            l=l+1
        else:
            l=l-1
    t+=1
    
    print('')
count=1
t=t-2
for var in range(2,n-1):
    l=t-1
    for var1 in range(0,count+1):
        print(' ',end='')
    count=count+1
    for var1 in range(2,2*(n-var)-3):
        print(l,end='')
        if var1<(2*(n-var)-2)/2:
            l=l+1
        else:
            l=l-1
    t-=1
        
    print('')


# In[85]:


n=int(input("Enter a number"))
t=5
for var in range(2,n):
    l=t
    for var1 in range(0,n-var):
        print(' ',end='')
    for var1 in range(2,2*var-3):
        print(l,end='')
        if var1<(2*var-2)/2:
            l=l-1
        else:
            l=l+1
    
    print('')
count=1
t=5
for var in range(2,n-1):
    l=t
    for var1 in range(0,count+1):
        print(' ',end='')
    count=count+1
    for var1 in range(2,2*(n-var)-3):
        print(l,end='')
        if var1<(2*(n-var)-2)/2:
            l=l-1
        else:
            l=l+1
        
    print('')


# In[86]:


n=int(input("Enter the Number"))
for var in range(0,n):
    for var1 in range(0,n):
        print('*',end='')
    print('')


# In[87]:


n=int(input("Enter the Number"))
for var in range(0,n):
    if var==0 or var==n-1:
        for var1 in range(0,n):
            print('*',end='')
    else:
        for var1 in range(0,n):
            if var1==0 or var1==n-1:
                print('*',end='')
            else:
                print(' ',end='')

    print('')


# In[88]:


n=int(input("Enter the Number"))
l=0
r=n-1
for var in range(0,n):
    for var1 in range(0,n):
        if var1==l or var1==r:
            print('\\',end='')
        else:
            print('*',end='')
    print('')
    l+=1
    r-=1


# In[89]:


n=int(input("Enter the Number"))
l=0
r=n-1
for var in range(0,n):
    for var1 in range(0,n):
        if var1==l:
            print('\\',end='')
        elif var1==r:
            print('/',end='')
        else:
            print('*',end='')
    print('')
    l+=1
    r-=1


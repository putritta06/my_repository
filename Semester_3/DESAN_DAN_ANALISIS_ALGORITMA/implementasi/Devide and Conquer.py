import random

min = 99999
max = 0

def getLarger(a,b):
    if b > a:
        return b
    else:
        return a

def getSmaller(a, b):
    if b < a:
        return b
    else:
        return a

def MinMax(array, start, end):
    global min
    global max
    mid = (start + end)/2
    if end - start > 2:
        MinMax(array, start, mid)
        MinMax(array, mid, end)
    else:
        array = array[start:end]
        if end - start == 1:
            array.append(array[0])
        max = getLarger(max, getLarger(array[0], array[1]))
        min = getSmaller(min, getSmaller(array[0], array[1]))


array = list()
length = 10
for x in range (0, length):
    array.append(random.randint(0, length))
print (array)
MinMax(array, 0, length)
print ("Max is ", str(max))
print ("Min is ", str(min))
                     

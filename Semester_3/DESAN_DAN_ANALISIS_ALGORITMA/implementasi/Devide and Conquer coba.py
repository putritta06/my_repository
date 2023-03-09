def merge_sort(arr):
    if len(arr) > 1:
        left_arr = arr[:len(arr)//2]
        rigth_arr = arr[len(arr)//2:]

        merge_sort(left_arr)
        merge_sort(right_arr)

        i = 0_# left
        j = 0_
        k = 0_

        while i < len(left_arr) and j < len(right_arr):
            if left_arr[i] < right_arr[j]:
                arr[k] = left_arr[i]
                i += 1

            else:
                arr[k] = right_arr[j]
                j += 1
            k += 1

        while i < len(left_arr):
            arr[k] = left_arr[i]
            i += 1
            k += 1

        while j < len(right_arr):
            arr[k] = right_arr[j]
            j += 1
            k += 1

arr_test = [2, 3, 7, 10, 5, 8, 1, 11]
merge_sort(arr_test)
print(arr_test)

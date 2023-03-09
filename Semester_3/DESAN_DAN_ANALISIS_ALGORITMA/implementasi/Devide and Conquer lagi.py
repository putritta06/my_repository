def sum(numbers: list[int]) -> int:
    if len(numbers) == 1:
        return numbers[0]
    count = len(numbers)
    return sum(numbers[0:count//2]) + sum(numbers[count//2:])

def sum_list(numbers: list[int]) -> int :
    return sum(numbers)

sum()

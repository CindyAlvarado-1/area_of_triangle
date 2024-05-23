import sys

def calculate_triangle_area(base, height):
    return 0.5 * base * height

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Error: Two numbers(Base & Height of Triangle) are required.")
        sys.exit(1)
    try:
        base = float(sys.argv[1])
        height = float(sys.argv[2])
    except ValueError:
        print("Error: Please enter valid numbers for Base & Height.")
        sys.exit(1)
    area = calculate_triangle_area(base, height)
    print(f"The area of the triangle with base {} and height {} is {}.".format(base,height,area))


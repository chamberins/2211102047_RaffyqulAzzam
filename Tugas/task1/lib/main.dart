int fpb(int a, int b) {
  while (b != 0) {
    int temp = b;
    b = a % b;
    a = temp;
  }
  return a;
}

void main() {
  List<List<int>> array2D = [
    List.generate(4, (i) => (i + 1) * 6),
    List.generate(5, (i) => 3 + (i * 2)),
    List.generate(6, (i) => (i + 4) * (i + 4) * (i + 4)),
    List.generate(7, (i) => 3 + (i * 7)),
  ];

  print("Isi List:");
  for (var row in array2D) {
    print(row.join(" "));
  }

  print("\n=== Menghitung FPB ===");
  int bil1 = 12;
  int bil2 = 8;

  print("Bilangan 1: $bil1");
  print("Bilangan 2: $bil2");
  print("FPB $bil1 dan $bil2 = ${fpb(bil1, bil2)}");
}
